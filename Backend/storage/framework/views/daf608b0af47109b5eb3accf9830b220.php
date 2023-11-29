<!-- resources/views/videos/index.blade.php -->



<?php $__env->startSection('content'); ?>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        .videos {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 90vh; /* 90% of viewport height */
            position: relative;
        }

        .video {
            overflow: hidden;
            aspect-ratio: 16/9;
            /*pointer-events: none; disable left click */
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .video iframe {
            width: 300%; /* Adjust the video width as needed */
            height: 100%; /* Adjust the video height as needed */
            margin-top: -0px;
            transform:scale(1.4);

        }

        .pagination {
            position: absolute;
            bottom: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 10px;
            box-sizing: border-box;
            background: #f4f4f4;
        }
    </style>

    <div class="videos">
        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="video">
                <iframe src="<?php echo e($video); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- Previous and Next links -->
        <div class="pagination">
            <?php if($videos->previousPageUrl()): ?>
                <a href="<?php echo e($videos->previousPageUrl()); ?>">Previous</a>
            <?php endif; ?>

            <?php if($videos->nextPageUrl()): ?>
                <a href="<?php echo e($videos->nextPageUrl()); ?>">Next</a>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\www\video-website\video-website-backend\resources\views/videos/index.blade.php ENDPATH**/ ?>