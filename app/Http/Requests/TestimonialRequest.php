<?php

namespace TheFramework\Http\Requests;

use TheFramework\App\Request;

class TestimonialRequest extends Request
{
    /**
     * Aturan validasi untuk request ini.
     */
    public function rules(): array
    {
        return [
            'nama_testimoni' => 'required|min:3|max:100',
            'posisi_testimoni' => 'required|min:3|max:100',
            'rating_testimoni' => 'required|min:1|max:5',
            'deskripsi_testimoni' => 'required|min:3|max:100',
        ];
    }

    /**
     * Pesan error kustom untuk validasi.
     */
    public function messages(): array
    {
        return [
            'nama_testimoni' => 'Nama wajib diisi.',
            'posisi_testimoni' => 'Posisi wajib diisi.',
            'rating_testimoni' => 'Rating wajib diisi.',
            'deskripsi_testimoni' => 'Deskripsi wajib diisi.',
        ];
    }

    public function validated(): array
    {
        return $this->validate($this->rules(), $this->messages());
    }
}