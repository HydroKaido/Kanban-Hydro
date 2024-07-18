<style>
    .container {
        display: none;
        position: absolute;
        width: 200px;
        right: 14px;
    }

    #mycheckbox:checked~.container {
        display: block;
    }

    #mycheckbox {
        display: none;
    }

    .form {
        margin: 0px;
    }
</style>
<div class="bg-white d-flex justify-content-between align-items-center py-3">
    <p class="ms-3 my-0">Dashboard</p>
    <div class="me-3">
        <input type="checkbox" id="mycheckbox">
        <label for="mycheckbox" class="">Hello! {{Auth::user()->username}}</label>
        <div class="container bg-white rounded border">
            <ul class="list-unstyled">
                <li>
                    <a href="#" class="text-decoration-none text-black btn">Account Settings</a>
                </li>
                <li>
                    <form action="{{route('logout.post')}}" method="POST" class="form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">Logout</button>
                    </form>
                </li>
            </ul>

        </div>
    </div>

</div>