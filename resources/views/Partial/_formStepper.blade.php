<div class="flex w-full justify-center">
    <ol class="lg:flex items-center w-full max-w-8xl space-y-4 lg:space-y-0">
        <li class="flex-1">
            <a href="{{route('personal.info.form')}}" class="flex items-center font-medium px-4 py-5 w-full rounded-lg
                {{ request()->is('builder/personal-info*') ? 'bg-blue-50 text-blue-500' : '' }}">
                <span
                    class="w-16 h-16 {{ request()->is('builder/personal-info*') ? 'bg-blue-500 text-white' : 'bg-gray-50 border border-gray-200 text-gray-900' }} rounded-full flex justify-center items-center mr-3 text-sm lg:w-14 lg:h-10">01</span>
                <h4 class="text-base {{ request()->is('builder/personal-info*') ? 'text-blue-500' : 'text-gray-900' }}">
                    Personal Information</h4>
            </a>
        </li>
        <li class="flex-1">
            <a href="{{route('experience.form.list')}}" class="flex items-center font-medium px-4 py-5 w-full rounded-lg
                {{ request()->is('builder/experience*') ? 'bg-blue-50 text-blue-500' : '' }}">
                <span
                    class="w-8 h-8 {{ request()->is('builder/experience*') ? 'bg-blue-500 text-white' : 'bg-gray-50 border border-gray-200 text-gray-900' }} rounded-full flex justify-center items-center mr-3 text-sm lg:w-10 lg:h-10">02</span>
                <h4 class="text-base {{ request()->is('builder/experience*') ? 'text-blue-500' : 'text-gray-900' }}">
                    Experience</h4>
            </a>
        </li>
        <li class="flex-1">
            <a href="{{route('education.form.list')}}" class="flex items-center font-medium px-4 py-5 w-full rounded-lg
                {{ request()->is('builder/education*') ? 'bg-blue-50 text-blue-500' : '' }}">
                <span
                    class="w-8 h-8 {{ request()->is('builder/education*') ? 'bg-blue-500 text-white' : 'bg-gray-50 border border-gray-200 text-gray-900' }} rounded-full flex justify-center items-center mr-3 text-sm lg:w-10 lg:h-10">03</span>
                <h4 class="text-base {{ request()->is('builder/education*') ? 'text-blue-500' : 'text-gray-900' }}">
                    Education</h4>
            </a>
        </li>
        <li class="flex-1">
            <a href="{{route('skill.form')}}" class="flex items-center font-medium px-4 py-5 w-full rounded-lg
                {{ request()->is('builder/skill*') ? 'bg-blue-50 text-blue-500' : '' }}">
                <span
                    class="w-8 h-8 {{ request()->is('builder/skill*') ? 'bg-blue-500 text-white' : 'bg-gray-50 border border-gray-200 text-gray-900' }} rounded-full flex justify-center items-center mr-3 text-sm lg:w-10 lg:h-10">04</span>
                <h4 class="text-base {{ request()->is('builder/skill*') ? 'text-blue-500' : 'text-gray-900' }}">Skills
                </h4>
            </a>
        </li>
        <li class="flex-1">
            <a href="{{route('project.form.list')}}" class="flex items-center font-medium px-4 py-5 w-full rounded-lg
                {{ request()->is('builder/project*') ? 'bg-blue-50 text-blue-500' : '' }}">
                <span
                    class="w-8 h-8 {{ request()->is('builder/project*') ? 'bg-blue-500 text-white' : 'bg-gray-50 border border-gray-200 text-gray-900' }} rounded-full flex justify-center items-center mr-3 text-sm lg:w-10 lg:h-10">05</span>
                <h4 class="text-base {{ request()->is('builder/project*') ? 'text-blue-500' : 'text-gray-900' }}">
                    Projects</h4>
            </a>
        </li>
        <li class="flex-1">
            <a href="{{route('language.form.list')}}" class="flex items-center font-medium px-4 py-5 w-full rounded-lg
                {{ request()->is('builder/language*') ? 'bg-blue-50 text-blue-500' : '' }}">
                <span
                    class="w-8 h-8 {{ request()->is('builder/language*') ? 'bg-blue-500 text-white' : 'bg-gray-50 border border-gray-200 text-gray-900' }} rounded-full flex justify-center items-center mr-3 text-sm lg:w-10 lg:h-10">06</span>
                <h4 class="text-base {{ request()->is('builder/language*') ? 'text-blue-500' : 'text-gray-900' }}">
                    Languages</h4>
            </a>
        </li>
    </ol>
</div>