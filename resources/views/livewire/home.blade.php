<div class="max-w-screen-xl px-4 py-12 mx-auto space-y-12 sm:px-6 lg:px-8">
    @if ($this->Produccc)
        <section>
            <h2 class="text-3xl font-bold">
                {{ $this->Produccc->translateAttribute('name') }}
            </h2>

            <div class="grid grid-cols-2 mt-8 lg:grid-cols-4 gap-x-4 gap-y-8">
                @foreach ($this->Produccc->products as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </section>
    @endif
</div>
