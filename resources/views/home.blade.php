
@extends('layouts.app')

@section('content')
    <div class='view_parent_image1'>
        @if(Auth::user())


            <div class="container" style="margin: 40px;margin-left: 80px;padding-top: 10px;">
                <p class="bg-light border-dark shadow-sm" style="height: 50px;width: 800px;margin-left: 50px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium alias amet cum, ducimus earum fuga hic id, incidunt minus nesciunt obcaecati omnis perferendis provident quam, quia reiciendis ullam veniam!  </p>
                <li class="col-12 col-md-6 col-lg-6 mb-3 d-flex flex-content-stretch">
                    <div class="Box pinned-item-list-item d-flex p-3 width-full public source">
                        <div class="pinned-item-list-item-content">
                            <div class="d-flex width-full flex-items-center position-relative">
                                <a href="/HirushaR/slaravel-blog-system" class="text-bold flex-auto">
                                    <span class="repo" title="slaravel-blog-system">your rank</span>
                                </a>

                            </div>


                            <p class="pinned-item-desc text-gray text-small d-block mt-2 mb-3">
                                <img src="assets/rank/Rank_01_black.png" alt="">
                            </p>

                            <p class="mb-0 f6 text-gray">
                           <span class="d-inline-block mr-3">
                              <span class="repo-language-color" style="background-color: #4F5D95"></span>
                                <span itemprop="programmingLanguage">PHP</span>
                                                </span>

                                <a href="/HirushaR/slaravel-blog-system/stargazers" class="pinned-item-meta muted-link ">
                                    <svg aria-label="star" class="octicon octicon-star" viewBox="0 0 14 16" version="1.1" width="14" height="16" role="img"><path fill-rule="evenodd" d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74L14 6z"></path></svg>
                                    1
                                </a>
                            </p>
                        </div>
                    </div>
                </li>
            </div>
        @else
            <div class="container" style="margin: 40px;margin-left: 80px;padding-top: 10px;">
                <p class="bg-light border-dark shadow-sm" style="height: 50px;width: 800px;margin-left: 50px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium alias amet cum, ducimus earum fuga hic id, incidunt minus nesciunt obcaecati omnis perferendis provident quam, quia reiciendis ullam veniam!  </p>

            </div>
        @endif

    </div>

@endsection

