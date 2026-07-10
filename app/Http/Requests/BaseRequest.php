<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BaseRequest extends FormRequest
{
    /**
     * Method ini diwarisi semua Form Request yang extend class ini.
     * Tidak perlu ditulis ulang di tiap Form Request.
     */
    protected function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(
            response()->json([
                'success' => false,
                'message' => 'Validasi gagal. Periksa kembali input kamu.',
                'errors' => $validator->errors(),
            ], 422)
        );
    }
}
