<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="menu-title">
					<span>Menu</span>
				</li>
				<li>
					<a href="#"><i class="fe fe-home"></i> <span>Dashboard</span></a>
				</li>
				<li class="submenu">
					<a href="javascript:;"><i class="fe fe-home"></i> <span>Evènements</span><span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="{{ route('back.news.create') }}">Créer</a></li>
						<li><a href="{{ route('back.news.index') }}">Voir la liste</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;"><i class="fe fe-home"></i> <span>Opérations</span><span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="{{ route('back.pret.index') }}">Prêts</a></li>
					</ul>
				</li>
				<li><a href="{{ route('back.virements.index') }}"><i class="fe fe-home"></i> <span>Virements</span></a></li>
				<li><a href="{{ route('back.transferts.index') }}"><i class="fe fe-home"></i> <span>Dépôts</span></a></li>
				<li class="submenu">
					<a href="#"><i class="fe fe-users"></i> <span> Clients</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="{{ route('back.clients.index') }}">Liste</a></li>
					</ul>
				</li>
			</ul>
		</div>
    </div>
</div>
