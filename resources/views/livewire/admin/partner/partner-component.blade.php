<div>
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex flex-wrap items-center justify-between gap20 mb-27">
                <h3>All Galleries</h3>
                <ul class="flex flex-wrap items-center justify-start breadcrumbs gap10">
                    <li>
                        <a href="{{route('dashboard')}}">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Partners</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <div class="wg-table table-all-user">
                    <div class="card">
                        <div class="card-header">
                            <div class="flex flex-wrap items-center justify-between gap10">
                                <h3 class="card-title">Partners</h3>
                                <a href="{{ route('partner.create') }}" class="btn btn-primary btn-lg">
                                    <i class="icon-plus"></i>
                                    <span>Add New</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(session()->has('message'))
                                    <div class="mb-3 text-3xl text-green-600 text-success" style="font-size: 1.5rem">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Image Alt</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($partners as $partner)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td class="pname">
                                                    <div class="image">
                                                        <img src="{{asset('assets/images/partners')}}/{{$partner?->image}}" alt="" class="image" width="300">
                                                    </div>
                                                </td>
                                                <td>{{$partner?->alt}}</td>
                                                <td>
                                                    <div class="list-icon-function">
                                                        <a href="{{route('partner.edit', $partner->id) }}">
                                                            <div class="item edit">
                                                                <i class="icon-edit"></i>
                                                            </div>
                                                        </a>
                                                        <a href="#" onclick="confirm('Are you sure to Delete this admission?') || event.stopImmediatePropagation()" wire:click.prevent="deletePartner({{$partner->id}})">
                                                            <div class="item edit">
                                                                <i class="icon-trash text-danger fw-bolder"></i>
                                                            </div>
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="divider"></div>
                    <div class="flex flex-wrap items-center justify-between gap10 wgp-pagination">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>