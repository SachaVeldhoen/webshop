<livewire:header />

<div>
    <div class="uk-container">
        <form method="POST" enctype="multipart/form-data" action="{{route('product.store')}}">
            @csrf
            <input  class="uk-input uk-margin uk-margin-medium-top" name="name" type="text" placeholder="Name">

            <input  class="uk-input uk-margin" name="description" type="text" placeholder="Description">

            <input  class="uk-input uk-margin" name="price" type="text" placeholder="Price">

            <input  class="uk-input uk-margin" name="stock" type="text" placeholder="Stock">

            <button class="uk-button uk-button-primary" type="submit">Upload product</button>
        </form>
    </div>
</div>

