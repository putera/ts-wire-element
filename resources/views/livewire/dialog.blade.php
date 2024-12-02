<div>
    <form wire:submit="asubmit" class="p-10 space-y-5">

        <div class="text-lg">Testing 123</div>

        <div>
            <x-date wire:model="adate" format="DD/MM/YYYY" />
        </div>
        <div>
            <x-input wire:model="atext" autofocus />
        </div>


        <x-button type="submit" text="Submit" />
    </form>
</div>
