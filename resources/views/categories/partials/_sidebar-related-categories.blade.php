<div class="panel panel-default panel-flush">
    <div class="panel-heading">
        <i class="fa fa-tags" aria-hidden="true"></i> Related Categories
    </div>

    <div class="panel-body">
        <div class="spark-settings-tabs">
            @if(! $relatedCategories->isEmpty())
                <ul class="nav spark-settings-stacked-tabs" role="tablist">
                    @foreach($relatedCategories as $relatedCategory)
                        <li role="presentation">
                            <a href="{{ route('categories.show', ['category' => $relatedCategory->slug]) }}">
                                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                {{ $relatedCategory->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
