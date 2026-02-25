<?php

namespace TheFramework\Http\Requests;

use TheFramework\App\Request;

class ContactRequest extends Request
{
    /**
     * Aturan validasi untuk request ini.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:100',
            'phone' => 'required|min:10|max:15',
            'subject' => 'required|min:3|max:100',
            'message' => 'required|min:3|max:100',
        ];
    }

    /**
     * Pesan error kustom untuk validasi.
     */
    public function messages(): array
    {
        return [
            'name' => 'Nama wajib diisi.',
            'phone' => 'Nomor wajib diisi.',
            'subject' => 'Subjek wajib diisi.',
            'message' => 'Pesan wajib diisi.',
        ];
    }

    public function validated(): array
    {
        return $this->validate($this->rules(), $this->messages());
    }
}