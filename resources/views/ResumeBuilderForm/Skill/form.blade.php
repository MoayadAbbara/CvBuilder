@extends("Layouts.main")
@section("content")
@include('Partial._formStepper')
<form class="w-full max-w-3xl mt-6 mx-auto">
    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="skill-input">
                Skills
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="skill-input" type="text" placeholder="Enter Skill Here" name="skill">
            <div class="text-right mt-4">
                <button type="button" id="add-skill-btn"
                    class="bg-green-500 hover:bg-green-500 text-white font-bold py-2 px-4 rounded">
                    Add New Skill <i class="fa-solid fa-plus"></i>
                </button>
            </div>
        </div>
    </div>

    <div id="skills-container" class="flex justify-center flex-wrap gap-2 p-4 max-w-sm mx-auto  text-sm">
        <!-- Dynamically added skills will appear here -->
    </div>
    <div class="text-right">
        <a href="{{route('project.form')}}" id="save-skills-btn"
            class="bg-blue-500 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">
            Save <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>
</form>
@endsection


@push('scripts')
<script>
    let skills = [];
    
    const skillInput = document.getElementById('skill-input');
    const skillsContainer = document.getElementById('skills-container');
    const addSkillBtn = document.getElementById('add-skill-btn');
    const saveSkillsBtn = document.getElementById('save-skills-btn');
    
    function renderSkills() {
    skillsContainer.innerHTML = '';    
    skills.forEach((skill, index) => {
    const skillButton = document.createElement('button');
    skillButton.className = 'px-2 py-1 rounded bg-gray-200/50 text-gray-700 hover:bg-gray-300';
    skillButton.textContent = skill;
    
    skillButton.addEventListener('click', () => {
    removeSkill(index);
    });
    

    skillsContainer.appendChild(skillButton);
    });
    }
    

    addSkillBtn.addEventListener('click', function() {
    const skill = skillInput.value.trim();
    
    if (skill !== '') {

    skills.push(skill);
    

    skillInput.value = '';
    

    renderSkills();
    }
    });
    

    function removeSkill(index) {
    skills.splice(index, 1);
    renderSkills();
    }
    

    // saveSkillsBtn.addEventListener('click', function() {
    // if (skills.length > 0) {
    // console.log('Skills saved:', skills); 
    // alert('Skills saved successfully');
    // } else {
    // alert('No skills to save!');
    // }
    // });
</script>
@endpush