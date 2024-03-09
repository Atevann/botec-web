<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/**
 * Контроллер локализации
 */
class LanguageController extends Controller
{
    /**
     * Устанавливает язык в сессию
     */
    public function setLanguage(Request $request)
    {
        $language = $request->string('lang')->value();

        if ($language && in_array($language, config('app.available_locales'))) {
            Session::put('locale', $language);
        }

        return redirect()->back();
    }
}
