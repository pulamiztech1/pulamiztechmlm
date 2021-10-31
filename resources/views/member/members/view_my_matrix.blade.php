@extends('layouts.memberLayouts.member_layout')
@section('content')

<div class="breadcome-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcome-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="breadcome-heading">
								<form role="search" class="sr-input-func">
									<input type="text" placeholder="Search..." class="search-int form-control">
									<a href="#"><i class="fa fa-search"></i></a>
								</form>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<ul class="breadcome-menu">
								<li><a href="#">Home</a>
									<span class="bread-slash">/</span>
								</li>
								<li>
									<span class="bread-blod">view My Matrix</span>
								</li>
							</ul>
						</div>
                        
					</div>
				</div>
			</div>
		</div> 
	</div>
</div>
<div class="data-table-area mg-b-15">
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="sparkline13-list">
				<div class="sparkline13-hd">
					<div class="main-sparkline13-hd">
						<h1>My <span class="table-project-n">Matrix</span> Members</h1>
					</div>
				</div>
		
			</div>
		</div>
	</div>
    <div class="tf-tree tf-custom">
        <ul>
          <li>
			  @if($left_child==null && $right_child==null && $middle_child==null)
			    <h1>You have not downlines yet</h1>
			  @else
			    <span class="tf-nc">{{Auth::guard('agent')->user()->username}}</span>
			  @endif
            <ul>
                @if($left_child!=null)
                    <li>
                       <a href="{{ route('viewMemberDetails',$left_child->id) }}"><span class="tf-nc">{{$left_child->username}}</span></a>
                    </li>
                @endif
                @if($middle_child!=null)
                    <li>
                       <a href="{{ route('viewMemberDetails',$middle_child->id) }}"><span class="tf-nc">{{$middle_child->username}}</span></a>
                    </li>
                @endif
                @if($right_child!=null)
                    <li>
                        <a href="{{ route('viewMemberDetails',$right_child->id) }}"><span class="tf-nc">{{$right_child->username}}</span></a>
                    </li>
                @endif
              
            </ul>
          </li>
        </ul>
      </div>
</div>
</div>
@endsection