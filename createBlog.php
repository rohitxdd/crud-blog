<?php
include("./components/header.php")
?>
<div class="container">
    <div class="createBlog">
        <form action="./phpscripts/create.php" class="create-blog" onsubmit="return createValidation()" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="titlehelp" placeholder="Enter Title..." maxlength="50" name="title">
                <small id="titlehelp" class="form-text text-muted">Title should not be more than 50 Characters</small>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea type="text" class="form-control" id="content" placeholder="Enter Content..." name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3" name="create">Create</button>
        </form>
    </div>
    <script>
        function createValidation(){
            let title = document.getElementById("title").value.trim();
            let content = document.getElementById("content").value.trim()
            if(!title || !content){
                return false
            }else{
                return true
            }
        }
    </Script>
</div>
<?php
include("./components/footer.php")
?>