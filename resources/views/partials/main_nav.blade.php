<div class="row no-gutters">
    <div class="col-12 text-center pt-3">
        <i class="fa fa-user-circle fa-4x text-white" aria-hidden="true"></i>
        <div class="dropdown">
            <button class="btn btn-link btn-block dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->last_name }}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        <div class="dropdown-divider"></div>
    </div>
    <div class="col-12">
        <div class="container-item-nav">
            <a class="dropdown-item active" href="{{ route('admin') }}">
                <i class="fa fa-home fa-2x" aria-hidden="true"></i> <span class="hidden-md-down pl-lg-3 pl-md-2"> Inicio</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('reagents') }}">
                <i class="fa fa-folder-open fa-2x" aria-hidden="true"></i> <span class="hidden-md-down pl-lg-3 pl-md-2"> Reactivos</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
                <i class="fa fa-black-tie fa-2x" aria-hidden="true"></i> <span class="hidden-md-down pl-lg-3 pl-md-2"> Materias</span>
            </a>
            <div class="dropdown-divider"></div>
        </div>
    </div>
</div>