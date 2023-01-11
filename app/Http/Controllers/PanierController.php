<?php

    namespace App\Http\Controllers;

    use App\Models\Panier;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Redirect;

    class PanierController extends Controller {

        public function showPanierPage() {
            $user = Auth::user();
            $total = 0;

            foreach ($user->panier->produits as $produit) {
                $total += $produit->prix * $produit->pivot->quantity;
            }

            return view('main.panier')
                ->with('panier_produits', $user->panier->produits)
                ->with('total', $total)
                ->with('total_livraison', ($total + 4));

        }

        public function destroy( $id)
        {
            $user = Auth::user();
            $user->panier->produits()->detach($id);
            return Redirect::back();

        }
    }
