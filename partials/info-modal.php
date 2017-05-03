<div id="info-modal" class="login-page modal" style="display: block">
    <div class="modal-form">
        <span onclick="document.getElementById('info-modal').style.display='none'"
              class="modal-close" title="Close Modal">&times;</span>
        <h3 class="modal-text-header">
            <?php echo $_SESSION['status_message']?>
        </h3>
        <button onclick="document.getElementById('info-modal').style.display='none'"
                class="btn-submit" type="submit">Ok
        </button>
    </div>
    <?php $_SESSION['status_message'] = ''; ?>
</div>

