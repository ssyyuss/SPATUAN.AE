<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        // Only authenticated users can submit the form
        return Auth::check();
    }

    public function rules()
    {
        return [
            'name' => [
                'required', 
                'string', 
                'min:2', 
                'max:50', 
                'regex:/^[a-zA-Z\s]+$/' // Only letters and spaces
            ],
            'email' => [
                'required', 
                'email', 
                'max:255', 
                'unique:contacts,email', // Prevent duplicate submissions
                function($attribute, $value, $fail) {
                    // Additional email domain validation
                    $allowedDomains = ['gmail.com', 'yahoo.com', 'hotmail.com', 'outlook.com'];
                    $domain = substr(strrchr($value, "@"), 1);
                    if (!in_array($domain, $allowedDomains)) {
                        $fail('Please use a valid email domain.');
                    }
                }
            ],
            'phone' => [
                'required', 
                'string', 
                'max:15', 
                'regex:/^(\+62|62|0)8[1-9][0-9]{6,10}$/' // Indonesian phone number format
            ],
            'message' => [
                'required', 
                'string', 
                'min:10', 
                'max:500', 
                function($attribute, $value, $fail) {
                    // Prevent potential spam or harmful content
                    $forbiddenWords = ['spam', 'buy', 'sell', 'viagra', 'casino'];
                    foreach ($forbiddenWords as $word) {
                        if (stripos($value, $word) !== false) {
                            $fail('Your message contains inappropriate content.');
                        }
                    }
                }
            ],
        ];
    }

    public function messages()
    {
        return [
            'name.regex' => 'Name can only contain letters and spaces.',
            'email.unique' => 'This email has already been submitted.',
            'phone.regex' => 'Please enter a valid Indonesian phone number.',
            'message.min' => 'Message must be at least 10 characters long.',
            'message.max' => 'Message cannot exceed 500 characters.',
        ];
    }

    // Sanitize input data before validation
    protected function prepareForValidation()
    {
        $this->merge([
            'name' => strip_tags($this->name),
            'email' => filter_var($this->email, FILTER_SANITIZE_EMAIL),
            'phone' => preg_replace('/[^0-9+]/', '', $this->phone),
            'message' => strip_tags($this->message)
        ]);
    }
}