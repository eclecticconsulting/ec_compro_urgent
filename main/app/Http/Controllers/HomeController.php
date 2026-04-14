<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    private function solutionsData(): array
    {
        return [
            [
                'slug' => 'sap',
                'name' => 'SAP',
                'logo' => 'assets/img/logo/sap.png',
            ],
            [
                'slug' => 'salesforce',
                'name' => 'Salesforce',
                'logo' => 'assets/img/logo/salesforce.png',
            ],
            [
                'slug' => 'yonyou',
                'name' => 'Yonyou',
                'logo' => 'assets/img/logo/yonyou.png',
            ],
            [
                'slug' => 'aws',
                'name' => 'AWS',
                'logo' => 'assets/img/logo/aws.png',
            ],
            [
                'slug' => 'huawei',
                'name' => 'Huawei',
                'logo' => 'assets/img/logo/huawei.png',
            ],
            [
                'slug' => 'gcp',
                'name' => 'Google Cloud',
                'logo' => 'assets/img/logo/gcp.png',
            ],
            [
                'slug' => 'samsung',
                'name' => 'Samsung',
                'logo' => 'assets/img/logo/samsung.png',
            ],
            [
                'slug' => 'ibm',
                'name' => 'IBM',
                'logo' => 'assets/img/logo/ibm.png',
            ],
        ];
    }

    private function findSolution(string $slug): ?array
    {
        return Arr::first($this->solutionsData(), fn (array $solution) => $solution['slug'] === $slug);
    }

    private function findSolutionOrAbort(string $slug): array
    {
        $solution = $this->findSolution($slug);

        if (! $solution) {
            abort(404);
        }

        return $solution;
    }

    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about_us');
    }

    public function solution()
    {
        return view('our_solution');
    }

    public function solutionDetail(string $slug)
    {
        if ($slug === 'google-cloud') {
            return redirect()->route('solution_gcp');
        }

        if (in_array($slug, ['sap', 'salesforce', 'yonyou'], true)) {
            return match ($slug) {
                'sap' => redirect()->route('solution_sap'),
                'salesforce' => redirect()->route('solution_salesforce'),
                'yonyou' => redirect()->route('solution_yonyou'),
            };
        }

        $solution = $this->findSolutionOrAbort($slug);

        return view('solution_detail', [
            'solution' => $solution,
        ]);
    }

    public function sapSolution()
    {
        return view('solution_sap', [
            'solution' => $this->findSolutionOrAbort('sap'),
        ]);
    }

    public function salesforceSolution()
    {
        return view('solution_salesforce', [
            'solution' => $this->findSolutionOrAbort('salesforce'),
        ]);
    }

    public function yonyouSolution()
    {
        return view('solution_yonyou', [
            'solution' => $this->findSolutionOrAbort('yonyou'),
        ]);
    }

    public function awsSolution()
    {
        return view('solution_aws', [
            'solution' => $this->findSolutionOrAbort('aws'),
        ]);
    }

    public function gcpSolution()
    {
        return view('solution_gcp', [
            'solution' => $this->findSolutionOrAbort('gcp'),
        ]);
    }

    public function huaweiSolution()
    {
        return view('solution_huawei', [
            'solution' => $this->findSolutionOrAbort('huawei'),
        ]);
    }

    public function samsungSolution()
    {
        return view('solution_samsung', [
            'solution' => $this->findSolutionOrAbort('samsung'),
        ]);
    }

    public function ibmSolution()
    {
        return view('solution_ibm', [
            'solution' => $this->findSolutionOrAbort('ibm'),
        ]);
    }

    public function sapPrivateEdition()
    {
        return view('sap_private_edition');
    }

    public function sapPublicEdition()
    {
        return view('sap_public_edition');
    }

    public function stories()
    {
        return view('success_story');
    }

    public function news()
    {
        // return view('news');

        return view('maintenance');
    }

    public function career()
    {
        return view('career');
    }

    public function contact()
    {
        return view('contact_us');
    }

    public function contactStore(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'phone' => ['required', 'string', 'max:50'],
            'company' => ['required', 'string', 'max:120'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        ContactMessage::create($validated);

        return back()->with('status', 'Pesan berhasil dikirim.');
    }

    public function contactGetAPI(Request $request)
    {
        if ($request->code == "0987654321_1234567890") {            
            $all = ContactMessage::all();

            return response()->json([
                'success' => true,
                'message' => 'Daftar pesan kontak',
                'data'    => $all
            ], 200);
        }


        return response()->json([
            'success' => 'fail',
            'message' => '?',
        ], 200);
    }

    public function maintenance()
    {
        return view('maintenance');
    }
}
