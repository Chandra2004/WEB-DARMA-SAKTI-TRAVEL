<?php

namespace TheFramework\Http\Requests;

use TheFramework\App\Request;

class BookingRequest extends Request
{
    /**
     * Aturan validasi untuk request ini.
     */
    public function rules(): array
    {
        return [
            // 'field_name' => 'required|min:3|max:100',
            'nama' => 'required|min:3|max:100',
            'model' => 'required|min:3|max:100',
            'lokasi' => 'required|min:3|max:200',
            'tujuan' => 'required|min:3|max:200',
            'tanggalAwal' => 'required',
            'tanggalAkhir' => 'required',
            'jamBooking' => 'required',
        ];
    }
    
    /**
     * Pesan error kustom untuk validasi.
    */
    public function messages(): array
    {
        return [
            'nama' => 'Nama wajib diisi.',
            'model' => 'Model wajib diisi.',
            'lokasi' => 'Lokasi wajib diisi.',
            'tujuan' => 'Tujuan wajib diisi.',
            'tanggalAwal' => 'Tanggal awal wajib diisi.',
            'tanggalAkhir' => 'Tanggal akhir wajib diisi.',
            'jamBooking' => 'Jam booking wajib diisi.',
        ];
    }

    public function validated(): array
    {
        return $this->validate($this->rules(), $this->messages());
    }
}