<?php

use Latte\Runtime as LR;

/** source: /home/u305329384/domains/mirazcode.com/public_html/test10/app/Presenters/templates/Admin/signIn.latte */
final class Template16d6d6dce2 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '
<!-- Card -->
<div class="card smooth-shadow-md">
	<!-- Card body -->
	<div class="card-body p-6">
		<div class="mb-4">
			<h1>InSync</h1>
			<p class="mb-6">Please enter your user information.</p>
		</div>
		<!-- Form -->
		';
		$form = $this->global->formsStack[] = $this->global->uiControl["signInForm"];
		Nette\Bridges\FormsLatte\Runtime::initializeForm($form);
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form, []) /* line 13 */;
		echo '
			<!-- Username -->
			<div class="mb-3">
				';
		if ($ʟ_label = end($this->global->formsStack)["username"]->getLabel()) echo $ʟ_label->addAttributes(['class' => "form-label"]);
		echo '
				';
		echo end($this->global->formsStack)["username"]->getControl()->addAttributes(['class' => "form-control", 'placeholder' => "Uživatelské jméno"]) /* line 17 */;
		echo '
			</div>
			<!-- Password -->
			<div class="mb-3">
				';
		if ($ʟ_label = end($this->global->formsStack)["password"]->getLabel()) echo $ʟ_label->addAttributes(['class' => "form-label"]);
		echo '
				';
		echo end($this->global->formsStack)["password"]->getControl()->addAttributes(['class' => "form-control", 'placeholder' => "**************"]) /* line 22 */;
		echo '
			</div>
			<div>
				<!-- Button -->
				<div class="d-grid">
					';
		echo end($this->global->formsStack)["send"]->getControl()->addAttributes(['class' => "btn btn-primary"]) /* line 37 */;
		echo '
				</div>

				<div class="d-md-flex justify-content-between mt-4">
					<div class="mb-2 mb-md-0">
						<a href="sign-up.html" class="fs-5">Create An
							Account </a>
					</div>
					<div>
						<a href="forget-password.html" class="text-inherit
                        fs-5">Forgot your password?</a>
					</div>

				</div>
			</div>


		';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
		echo '
	</div>
</div>';
	}

}
