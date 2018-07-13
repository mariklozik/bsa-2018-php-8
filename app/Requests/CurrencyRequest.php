<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class CurrencyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'         => 'required|min:2|max:255',
            'short_name'    => 'required|min:2|max:5',
            'logo_url'      => 'required|url',
            'price'         => 'required|min:0.000|numeric'
        ];
    }
    public function messages()
    {
        return [
            'title.min'             => 'Title must be greater then 2 chars',
            'title.max'             => 'Title must be less then 255 chars',

            'short_name.min'        => 'Short name must be greater then 2 chars',
            'short_name.max'        => 'Short name must be less then 5 chars',

            'logo_url.url'          => 'Invalid url format',

            'price.min'             => 'Minimum price must be minimum 0.001',
            'price.numeric'         => 'The price must be a number.'
        ];
    }
}