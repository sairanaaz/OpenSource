		
		<div id="sidebar">
			<div class="sidebar-box">
				<span class="sidebar-title">About Us</span>
				<div class="dots"></div>			
				<div class="textwidget">
					<p>Project for the Subject Open source to create a worpdress theme</p>
				</div>
			</div>		
			<div class="sidebar-box">		
					<span class="sidebar-title">recent posts</span><div class="dots"></div>		
				<ul>
				<li><a href="http://sst.umt.edu.pk" title="Hello world!">Hello world!</a></li>
				</ul>
			</div>
		</div><!-- sidebar -->		
		<div class="spacer"></div>
	</div><!-- wrapper -->
	<div id="sidebar">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar") ) : ?>
            <?php endif; ?>
        </div><!-- sidebar -->      
        <div class="spacer"></div>
    </div><!-- wrapper -->
	</body>
</html>
