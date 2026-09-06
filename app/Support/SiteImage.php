<?php

namespace App\Support;

/**
 * Résout le chemin public d'une image du site.
 *
 * On cherche le premier fichier existant parmi les extensions candidates
 * (webp, jpg, png…) pour un même nom de base : il suffit donc de déposer
 * la vraie photo dans public/images/ sans toucher aux vues. Le placeholder
 * SVG sert de secours tant que la photo n'est pas fournie.
 */
class SiteImage
{
    /** @var string[] */
    protected const EXTENSIONS = ['webp', 'jpg', 'jpeg', 'png', 'svg'];

    public static function url(string $name, ?string $fallback = null): string
    {
        foreach (self::EXTENSIONS as $extension) {
            $relative = "images/{$name}.{$extension}";

            if (is_file(public_path($relative))) {
                return asset($relative);
            }
        }

        return $fallback ? asset("images/{$fallback}") : asset("images/{$name}.svg");
    }

    public static function exists(string $name): bool
    {
        foreach (self::EXTENSIONS as $extension) {
            if (is_file(public_path("images/{$name}.{$extension}"))) {
                return true;
            }
        }

        return false;
    }
}
