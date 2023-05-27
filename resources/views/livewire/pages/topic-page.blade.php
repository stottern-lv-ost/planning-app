<div>

    <x-partials.breadcrumb :items="[
        [
            'url' => route('pages.topics.index'),
            'label' => __('app.navigation.topics'),
        ],
    ]" />

    <x-partials.page-header heading="{{ __('app.pages.topics.heading') }}"
        subheading="{{ __('app.pages.topics.subheading') }}" />


    <div>
        {{ $this->table }}
    </div>
</div>
