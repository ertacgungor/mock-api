<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mock;
use App\Http\Resources\MockManagementDetails;
use App\Http\Resources\MockManagementList;
use App\Http\Resources\MockManagementInsert;

class MockManagementController extends Controller
{
    public function list(Request $request)
    {
        $mocks = Mock::withTrashed()->get();
        return MockManagementList::collection($mocks);
    }

    public function details($endpoint, Request $request)
    {
        $reportArray = Mock::listEndpointDetails($endpoint, $request);
        return new MockManagementDetails($reportArray);
    }

    public function insert(Request $request)
    {
        $reportArray = Mock::storeListEndpoits($request);
        return MockManagementInsert::collection($reportArray);
    }
}
