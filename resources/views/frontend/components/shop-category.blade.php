<div class="categories">
    <div  class="filters button-group container">	
    <nav id="primary_nav_wrap">
        <ul>
            <li><a href="#">Shop <i class="fa fa-chevron-down"></i></a>
                <ul>
                    @foreach( $categories as $parentCategory)
                    <li><a href="{{ $parentCategory->path() }}" >{{ $parentCategory->category_name ?? '' }}</a></li>
                    {{--<li><a href="{{ $parentCategory->path() }}" >{{ $parentCategory->category_name ?? '' }} <span>
                        @if (isset($parentCategory->children))
                        <i class="fa fa-angle-right"></i>
                        @endif
                        </span></a>
                        <ul >
                            @foreach($parentCategory->children as $key => $child_cat)
                                <li><a href="{{ $child_cat->path() }}">{{ $child_cat->category_name }}</a>
                                    <ul>
                                        @foreach($child_cat->child as $key => $child)
                                        <li><a href="{{ $child->path() }}">{{ $child->category_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li> --}}
                    @endforeach

                   
                </ul>
            </li>
        </ul>
    </nav>
        @foreach ($categories as $index => $category)			
            @if($index < 9 )	
                <a href="{{ $category->path() }}" class="filter button is-checked" >{{ $category->category_name }}</a>
            @endif
        @endforeach								
    </div>
</div>