<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function setLanguage(Request $request)
    {
        // Фильтруем входящий параметр lang, чтобы он содержал только допустимые значения
        $language = $request->query('lang');

        // Проверяем, является ли язык допустимым
        if ($language && in_array($language, ['en', 'ru'])) {
            Session::put('locale', $language);
        }

        return redirect()->back();
    }
}
