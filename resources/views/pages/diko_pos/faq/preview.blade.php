@extends('layout.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <div class="card">
                            <div class="card-header" style="margin-top: 15px;">
                                <div class="faq-list">
                                    <ul>
                                        {{-- @foreach ($post as $posts) --}}
                                        <li data-aos="fade-up" data-aos-delay="100">
                                            <i class="bx bx-help-circle icon-help"></i>
                                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-{{ $post->id }}">
                                                {{ $post->question }}
                                                <i class="bx bx-chevron-down icon-show"></i>
                                                <i class="bx bx-chevron-up icon-close"></i>
                                            </a>
                                            <div id="faq-list-{{ $post->id }}" class="collapse show" data-bs-parent=".faq-list">
                                                <p>
                                                    {{ $post->question }}
                                                </p>
                                                <p>
                                                    {{ $post->answer }}
                                                </p>
                                            </div>
                                        </li>
                                        {{-- @endforeach --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="card-header" style="margin-top: 15px;">
                                <p style="text-align: right;"><a href="" class="btn btn-primary">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection