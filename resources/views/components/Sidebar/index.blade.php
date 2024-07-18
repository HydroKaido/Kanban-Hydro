<style>
    .sidebar {
        height: 100vh;
        width: 15.6rem;
        background-color: #242527;
        position: fixed;
        top: 0;
        left: 0;
    }

    .image-sidebar {
        height: 80px;
        width: 80px;
    }
    
    #container_img {
    width: 100px;
    height: 100px;
    border-radius: 100px;
    background: #333;
    }
    #name {
    width: 100%;
    text-align: center;
    color: white;
    font-size: 36px;
    line-height: 100px;
    }
    @media only screen and (max-width: 992px) {
        .sidebar {
            visibility: hidden;
        }
    }
</style>
<div class="sidebar text-white p-3">
    <div class="d-flex align-items-center mb-3">
        @if (Auth::user()->image)
            <img src="https://dummyimage.com/300" alt="" class="rounded-circle me-3 image-sidebar">
        @else
        <div id="container_img">
            <div id="name"></div>
        </div>
        @endif
        <div class="d-flex flex-column justify-content-center">
            <p class="mb-0">Doedsfad</p>
            <p class="mb-0 ">Admin</p>
        </div>
    </div>
    <ul class="nav flex-column">
    <li class="nav-item mb-1">
            <a href="{{'/dashboard'}}" class="nav-link text-white">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item mb-1">
            <a href="{{'/board'}}" class="nav-link text-white">
                <i class="bi bi-grid"></i> Board
            </a>
        </li>
        <li class="nav-item mb-1">
            <a href="{{'/feature'}}" class="nav-link text-white">
                <i class="bi bi-star"></i> Features
            </a>
        </li>
        <li class="nav-item">
            <a href="{{'/setting'}}" class="nav-link text-white">
                <i class="bi bi-gear"></i> Settings
            </a>
        </li>
    </ul>
</div>

<script>
    var firsname = "{{Auth::user()->firstname}}";
    var lastname = "{{Auth::user()->lastname}}";
    var initials = firsname.charAt(0).toUpperCase() + "" + lastname.charAt(0).toUpperCase()
    document.getElementById("name").innerHTML = initials;
</script>