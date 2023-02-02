<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PesananFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama' =>[
                'required',
                'max:255'
            ],
            'namaMakanan' =>[
                'required',
                'max:255'
            ],
            'porsi' =>[
                'required',
                'max:255'
            ],
            'alamat' =>[
                'required',
                'max:255'
            ],
            'jenisPembayaran' =>[
                'required',
                'max:255'
            ],
            'keterangan' =>[
                'required',
                'max:255'
            ],
        ];
    }
}
