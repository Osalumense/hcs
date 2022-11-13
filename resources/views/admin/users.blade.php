@extends('admin.layouts.app')

@section('content')
    <h3 class="mt-6 text-3xl">Users</h3>
    <div class="flex flex-col mt-6">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
            <table class="min-w-full overflow-x-scroll divide-y divide-gray-200" id="users-tbl">
            <thead class="bg-gray-50">
                <tr>
                <th
                    scope="col"
                    class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-500"
                >
                    Name
                </th>
                <th
                    scope="col"
                    class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-500 uppercase"
                >
                    Email
                </th>
                <th
                    scope="col"
                    class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-500 uppercase"
                >
                    Status
                </th>
                <th scope="col" class="relative px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-500 uppercase">
                    <span >Actions</span>
                </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
@endsection


@section('scripts')
    <script>
    $(function() {
        $('#users-tbl').DataTable({
            processing: true,
            serverSide: true,
            ajax      : '{!! url('/admin/users/fetch') !!}',
            language: {searchPlaceholder: "Search here  "},
            columns: [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'is_active', name: 'is_active', orderable: false},
                {data: 'action', name: 'action', orderable: false},
            ],
            order: [[0, 'desc']]
        });
    });
    </script>
@endsection