<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .row{
            margin: 0px !important;
        }
		.leftside {
			margin-top: 50px;
			margin-left:50px;
		}
		
		.labelexpanded {
			font-size: 12px;
		}
		
		.labelexpanded > input {
			display:none;
		}
		
		.labelexpanded input:checked + .radio-btns {
				background-color: #253c6a;
				color: #fff;
		}
		
		.radio-btns {
			width: 200px;
			height: 200px;
			border-radius: 15px;
			position: relative;
			text-align: center;
			padding: 15px 20px;
			box-shadow: 0 1px #c3c3c3;
			cursor: pointer;
			background-color: #eaeaea;
			float:left;
			margin-right: 15px;
		}
		
		.radio-btns > img {
			width: 128px;
			height: 130px;
		}
		
	</style>
</head>
<body style="background-color: #003B06;">