<style>
    .container {
        display: none;
        position: absolute;
        width: 200px;
        right: 14px;
        top: 50px;
    }

    #mycheckbox:checked~.container {
        display: block;
    }

    #mycheckbox {
        display: none;
    }

    #container_img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: green;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #name {
        color: white;
        font-size: 12px;
        line-height: 30px;
    }

    .form {
        margin: 0;
    }
</style>

<div class="bg-white d-flex justify-content-between align-items-center py-3">
    <p class="ms-3 my-0">Dashboard</p>
    <div class="d-flex align-items-center mx-3">

        <input type="checkbox" id="mycheckbox">
        <label for="mycheckbox" class="d-flex align-items-center cursor-pointer">

            @if (Auth::user()->image)
                <img src="{{ Auth::user()->image }}" alt="" class="rounded-circle me-2" style="width: 30px; height: 30px;">
            @else
                <div id="container_img" class="d-flex justify-content-center align-items-center">
                    <div id="name"></div>
                </div>
            @endif
            <span class="ms-2">{{ Auth::user()->username }}</span>
        </label>
        
        <div class="container bg-white rounded border">
            <ul class="list-unstyled mb-0">
                <li>
                    <a href="#" class="text-decoration-none text-black btn">Account Settings</a>
                </li>
                <li>
                    <form action="{{ route('logout.post') }}" method="POST" class="form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    var firstname = "{{ Auth::user()->username }}".charAt(0).toUpperCase();
    document.getElementById("name").innerHTML = firstname;
</script>
