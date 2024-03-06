<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lunar example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
<div class="container">


  <section class="bg-gray-50">
    <div class="max-w-screen-xl px-4 py-32 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-xl mx-auto text-center">
            <h1 class="text-3xl font-extrabold sm:text-5xl">
                Welcome to the

                <span class="text-indigo-600">
                    Lunar
                </span>

                Demo Store

                <span role="img"
                      aria-hidden="true">
                    👋
                </span>
            </h1>

            <p class="mt-4 font-medium sm:leading-relaxed sm:text-xl">
                This is an example of a classic e-commerce store built with Lunar.
                We are currently making a screencast series to show you how we did it!
            </p>

            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <a class="block w-full px-12 py-3 font-medium text-white bg-indigo-600 rounded shadow sm:w-auto active:bg-indigo-500 hover:bg-indigo-700 focus:outline-none focus:ring"
                   href="https://lunarphp.io/"
                   target="_blank"
                   rel="noopener noreferrer">
                    Lunar Website
                </a>

                <a class="block w-full px-12 py-3 font-medium text-indigo-600 rounded shadow sm:w-auto hover:text-indigo-700 active:text-indigo-500 focus:outline-none focus:ring"
                   href="https://github.com/lunarphp/demo-store"
                   target="_blank"
                   rel="noopener noreferrer">
                    Demo Store Repo
                </a>
            </div>
        </div>
    </div>
</section>


<div class="max-w-screen-xl px-4 py-12 mx-auto space-y-12 sm:px-6 lg:px-8">

    @if ($randomCollection)
        <section>
            <h2 class="text-3xl font-bold">
                {{ $randomCollection->translateAttribute('name') }}
            </h2>

            <div class="grid grid-cols-2 mt-8 lg:grid-cols-4 gap-x-4 gap-y-8">
                <div class="row">
                    @foreach ($randomCollection->products as $product)
                      <div class="col-sm-4">
                        <a class="block group" href="">
                            <div class="overflow-hidden rounded-lg aspect-w-1 aspect-h-1">
                                <img class="object-cover transition-transform duration-300 group-hover:scale-105"
                                src="https://placehold.co/400"
                                alt="test" />
                            </div>
    
                            <strong class="mt-2 text-sm font-medium">
                                {{ $product->translateAttribute('name') }}
                            </strong>
    
                            <p class="mt-1 text-sm text-gray-600">
                                <span class="sr-only">
                                    Price
                                </span>
    
                                <x-product-price :product="$product" />
                            </p>
                        </a>
                      </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
</div>


  
</div>

</body>
</html>
