<div class="card mb-3">
    <div class="card-header">
        <h4 class="text-center">Send Email</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('send.mail') }}">
            @csrf
            <div class="form-group">
                <input type="email" name="email" class="form-control" name="email" placeholder="Send To:" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="4" name="content" placeholder="Write Message" required></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success" style="width: 100%;">Send</button>
            </div>
        </form>
    </div>
</div>

