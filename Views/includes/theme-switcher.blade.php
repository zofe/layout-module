<li class="nav-item dropdown no-arrow" x-data="{
        open: false,
        theme: localStorage.theme,
        darkMode() {
            console.log('darkMode')
            this.theme = 'dark'
            localStorage.theme = 'dark'
            ThemeSwitcher.setDarkClass()
        },
        lightMode() {
            console.log('lightMode')
            this.theme = 'light'
            localStorage.theme = 'light'
            ThemeSwitcher.setDarkClass()
        },
        systemMode() {
            console.log('systemMode')
            this.theme = undefined
            localStorage.removeItem('theme')
            ThemeSwitcher.setDarkClass()
        },
     }"
     class="">

    <a class="nav-link dropdown-toggle" href="#" id="themeDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i x-show="theme === 'light'" class="fas fa-sun"></i>
        <i x-show="theme === 'dark'" class="fas fa-moon"></i>
        <i x-show="theme === undefined" class="fas fa-desktop"></i>
    </a>

    <div class="dropdown-menu shadow animated--grow-in" aria-labelledby="themeDropdown">

        <a href="#" @click.prevent="lightMode(); open = false"
           class="dropdown-item"
           :class="{ 'text-warning': theme === 'light' }">
            <i class="fas fa-sun"></i> Light
        </a>
        <a href="#" @click.prevent="darkMode(); open = false"
           class="dropdown-item"
           :class="{ 'text-info': theme === 'dark' }">
            <i class="fas fa-moon"></i> Dark
        </a>
        <a href="#" @click.prevent="systemMode(); open = false"
           class="dropdown-item"
           :class="{ 'text-primary': theme === undefined }">
            <i class="fas fa-desktop"></i> System
        </a>

    </div>

</li>
