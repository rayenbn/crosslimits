<div class="categories">
    <div  class="filters button-group container">			
        @foreach ($categories as $category)				
        <a href="{{ $category->path() }}" class="filter button is-checked" >{{ $category->category_name }}</a>
        @endforeach								
    </div>
</div>