<div class="main">
    <div class="nav">
        <a href="/" class="logo">Zocdoc</a>
        <div class="search-bar">
            <form wire:submit.prevent='sendRequest' class="form">
                <div>
                    <span class="material-symbols-outlined">
                        search
                    </span>
                    <input class="search-filed" wire:model="search" type="text" placeholder='{{$searchPlaceholder}}' />
                </div>
                <div>
                    <span class="material-symbols-outlined">
                        category
                    </span>
                    <select wire:model="select">
                        @foreach ($sections as $section)
                            <option value={{$section}} name={{$section}} >{{$section}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit">
                    Search
                </button>
            </form>
        </div>
        <div class="log">
            <a href="signin">SignIn</a>
            <a href="signup">SignUp</a>
        </div>
    </div>
</div>