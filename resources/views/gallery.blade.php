<html>
    <head>
        <title>Gallery</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="max-w-7xl m-auto">
            <h1 class="text-3xl font-bold text-gray-900 text-center py-8 uppercase">Gallery</h1>
            <form action="" method="post" enctype="multipart/form-data" class="flex flex-wrap text-center items-center justify-center p-4 rounded-lg items-center">
                @csrf
                <label class="block">
                  <input id="fileImage" type="file" name="fileImage" class="block w-full text-sm text-slate-500 pr-6
                    file:cursor-pointer
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-full file:border-0
                    file:text-sm file:font-semibold
                    file:bg-indigo-50 file:text-indigo-700
                    hover:file:bg-indigo-100
                  "/>
                  @if ($errors->has('fileImage'))
                    <span class="block text-red-700 py-4 text-left">{{ $errors->first('fileImage') }}</span>
                  @endif
                </label>

                <input type="submit" class="rounded border border-transparent bg-indigo-600 px-6 py-2 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" value="Upload Image">
            </form>

            <div class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($images as $image)
                    <div>
                        <img class="rounded" src="<?php echo Storage::disk('vultr')->url($image); ?>">
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>