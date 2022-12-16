<section class="portfolio">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section__title text-center">
                    <span class="sub-title">Project</span>
                    <h2 class="title">Here's My Projects</h2>
                </div>
            </div>
        </div>

    </div>
    <div class="tab-content" id="portfolioTabContent">

        @php
            $project = App\Models\Project::latest()->get();
        @endphp


        <div class="tab-pane show active" id="all" role="tabpanel" aria-labelledby="graphic-tab">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    <div class="col">
                        <div class="portfolio__active">

                            @foreach ($project as $item)
                                <div class="portfolio__item">
                                    <div class="portfolio__thumb">
                                        <img src="{{ asset($item->project_image) }}" alt="">
                                    </div>
                                    <div class="portfolio__overlay__content">
                                        <span>{{ $item->project_name }}</span>
                                        <h4 class="title"><a
                                                href="{{ route('project.details', $item->id) }}">{{ $item->project_title }}</a>
                                        </h4>
                                        <a href="{{ route('project.details', $item->id) }}" class="link">Project
                                            Details</a>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
