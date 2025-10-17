<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckModuleActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Module;

class CheckModuleActive
{
    public function handle(Request $request, Closure $next, $moduleName)
    {
        // Vérifie que l'utilisateur est bien connecté
        $user = Auth::user();
        if (!$user) {
            return response()->json([
                'message' => 'Utilisateur non authentifié'
            ], 401);
        }

        // Cherche le module dans la base de données
        $module = Module::where('name', $moduleName)->first();

        if (!$module) {
            return response()->json([
                'message' => 'Module inexistant'
            ], 404);
        }

        // Vérifie si ce module est actif pour cet utilisateur
        $isActive = $user->modules()
                        ->where('module_id', $module->id)
                        ->wherePivot('is_active', true)
                        ->exists();

        if (!$isActive) {
            return response()->json([
                'message' => 'Accès refusé : module inactif pour cet utilisateur'
            ], 403);
        }

        // Si tout est bon, on laisse passer la requête
        return $next($request);
    }
}