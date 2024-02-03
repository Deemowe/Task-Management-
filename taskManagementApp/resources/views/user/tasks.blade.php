<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tasks Management</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center pb-6">
            <h1 class="text-2xl font-bold">Tasks Management</h1>
        </div>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">ID</th>
                        <th class="border px-4 py-2">Project Name</th>
                        <th class="border px-4 py-2">Status</th>
                        <th class="border px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Example static row, replace with dynamic content --}}
                    <tr>
                        <td class="border px-4 py-2">1</td>
                        <td class="border px-4 py-2">Example Project</td>
                        <td class="border px-4 py-2">In Progress</td>
                        <td class="border px-4 py-2">
                            <a href="#" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded text-xs">Edit</a>
                            <a href="#" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-xs">Delete</a>
                        </td>
                    </tr>
                    {{-- End of example static row --}}
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
