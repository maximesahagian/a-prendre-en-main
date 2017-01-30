<section class="team-section">
<div class="equipe-line">
    <div class="equipe-image-container">

        <?php $i = 1; ?>
        @foreach($team as $member)
            <div class="image-profile" style="background: url('img/members/{{$member->image}}'); background-size: cover; background-position: center;">
                <div class="team-description">
                    <h3>
                        {{$member->name}}
                    </h3>
                    <h4>
                        Secrétaire Adjointe de l’association

                    </h4>
                    <p>
                        {{ $member->description }}
                    </p>

                    </div>
                <div class="color color-{{$i}}">

                </div>
                <span>{{$member->name}}</span>
            </div>

            <?php $i++; ?>
        @endforeach

    </div>
</div>

</section>