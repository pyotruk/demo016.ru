remotehost  = vstol.ru
remotehosturl = $(remotehost)
remoteuser  = marco
remotedir   = /var/www/demo016.ru
flags = -r -t -u -z -p -P -h -i --delete -e "ssh -i ~/.ssh/id_rsa -p 444"
excludes = --exclude '.DS_Store' --exclude '.git/*' --exclude '.gitignore' --exclude '.git/*'
filters = --filter 'protect /content/*'

deploy:
	@echo "\033[0;31mDeploying...\033[0m"
	rsync $(flags) $(filters) $(excludes) ./ $(remoteuser)@$(remotehost):$(remotedir)
	@echo "\033[0;31mDeploy complete.\033[0m"

content-update-local:
	@echo "\033[0;31mDownloading...\033[0m"
	rsync $(flags) $(excludes) $(remoteuser)@$(remotehost):$(remotedir)/content ./
	@echo "\033[0;31mLocal content update complete.\033[0m"

content-update-remote:
	@echo "\033[0;31mUploading...\033[0m"
	rsync $(flags) $(excludes) ./content/* $(remoteuser)@$(remotehost):$(remotedir)/content
	@echo "\033[0;31mRemote content update complete.\033[0m"
