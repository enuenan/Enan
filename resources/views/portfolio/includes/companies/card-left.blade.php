<div class="row no-gutters">
    <div class="col-sm py-2">
        <div class="card border-success shadow">
            <div class="card-body">
                <div class="float-end text-success small">Jan 10th 2021 8:30 AM</div>
                <h4 class="card-title text-success">Day 2 Sessions</h4>
                <p class="card-text">Sign-up for the lessons and speakers that coincide with your course
                    syllabus. Meet and greet with instructors.</p>
                <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-target="#t22_details"
                    data-bs-toggle="collapse">Show Details ▼</button>
                <div class="collapse border" id="t22_details">
                    <div class="p-2 text-monospace">
                        <div>08:30 - 09:00 Breakfast in CR 2A</div>
                        <div>09:00 - 10:30 Live sessions in CR 3</div>
                        <div>10:30 - 10:45 Break</div>
                        <div>10:45 - 12:00 Live sessions in CR 3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-company.timeline :active='false' />

    <div class="col-sm"> <!--spacer--> </div>
</div>
