<style type="text/css">
	.modal.left .modal-dialog,
	.modal.right .modal-dialog {
		position: fixed;
		margin: auto;
		width: 320px;
		height: 100%;
		-webkit-transform: translate3d(0%, 0, 0);
		-ms-transform: translate3d(0%, 0, 0);
		-o-transform: translate3d(0%, 0, 0);
		transform: translate3d(0%, 0, 0);
	}

	.modal.left .modal-content,
	.modal.right .modal-content {
		height: 100%;
		width: 100%;
		overflow-y: auto;
	}

	.modal.left .modal-body,
	.modal.right .modal-body {
		padding: 15px 15px 80px;
	}

	/*Left*/
	.modal.left.fade .modal-dialog {
		left: -320px;
		-webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
		-moz-transition: opacity 0.3s linear, left 0.3s ease-out;
		-o-transition: opacity 0.3s linear, left 0.3s ease-out;
		transition: opacity 0.3s linear, left 0.3s ease-out;
	}

	.modal.left.fade.in .modal-dialog {
		left: 0;
	}


	/*Right*/
	.modal.right.fade .modal-dialog {
		right: -320px;

		-webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
		-moz-transition: opacity 0.3s linear, right 0.3s ease-out;
		-o-transition: opacity 0.3s linear, right 0.3s ease-out;
		transition: opacity 0.3s linear, right 0.3s ease-out;
	}

	.modal.right.fade.in .modal-dialog {
		right: 0;
	}
    </style>
