<style>
    .sidebar {
        height: 100vh;
        width: 15rem;
        background-color: #403698;
        position: fixed;
        top: 0;
        left: 0;
    }

    .image-sidebar {
        height: 80px;
        width: 80px;
    }
    

    @media only screen and (max-width: 992px) {
        .sidebar {
            width: 20rem;
        }
    }
</style>

<div class="sidebar text-white p-3">
    <div class="d-flex align-items-center mb-3">
        <img src="https://dummyimage.com/300" alt="" class="rounded-circle me-3 image-sidebar">
        <div class="d-flex flex-column justify-content-center">
            <p class="mb-0">Doedsfad</p>
            <p class="mb-0 ">Admin</p>
        </div>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item mb-1">
            <a href="{{'/'}}" class="nav-link text-white">
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