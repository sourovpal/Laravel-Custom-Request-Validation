namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function show(StoreUserRequest $request, $id)
    {
        // You can access validated data like this:
        $validated = $request->validated();

        // Handle the request, the validation is already done in the request
        return response()->json([
            'status' => 'success',
            'data' => $validated,
        ], 200);
    }
}
