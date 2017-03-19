#
# Makefile
# Les Polypodes, 2014
# Licence: MIT
# Source: https://github.com/ronanguilloux/Build-and-Deploy/blob/master/build/Makefile
############################################################################
# Vars
# some lines may be useless for now, but these are nice tricks:
PWD         := $(shell pwd)
# Retrieve db connection params, triming white spaces
DB_USER	    := $(shell if [ -f app/config/parameters.yml ] ; then cat app/config/parameters.yml | grep 'database_user' | sed 's/database_user: //' | sed 's/^ *//;s/ *$$//' ; fi)
DB_PASSWORD := $(shell if [ -f app/config/parameters.yml ] ; then cat app/config/parameters.yml | grep 'database_password' | sed 's/database_password: //' | sed 's/null//' | sed 's/^ *//;s/ *$$//' ; fi)
DB_NAME     := $(shell if [ -f app/config/parameters.yml ] ; then cat app/config/parameters.yml | grep 'database_name' | sed 's/database_name: //' | sed 's/^ *//;s/ *$$//' ; fi)
NOW         := $(shell date +%Y-%m-%d--%H-%M-%S)
VENDOR_PATH := $(PWD)/vendor
BIN_PATH    := $(PWD)/bin
WEB_PATH    := $(PWD)/web
YELLOW      := $(shell tput bold ; tput setaf 3)
GREEN       := $(shell tput bold ; tput setaf 2)
RESETC      := $(shell tput sgr0)
# Custom MAKE options
ifndef VERBOSE
  MAKEFLAGS += --no-print-directory
endif

dumps:
	@echo "${YELLOW}dumping references...${RESETC}"
	@mysqldump -u root openwines openwines_ref_appellation > Resources/data/dumps/openwines_ref_appellation/${NOW}_openwines_ref_appellation.sql
	@mysqldump -u root openwines openwines_ref_region > Resources/data/dumps/openwines_ref_region/${NOW}_openwines_ref_region.sql
	@mysqldump -u root openwines openwines_ref_varietal > Resources/data/dumps/openwines_ref_varietal/${NOW}_openwines_ref_varietal.sql
	@echo "${GREEN}done!${RESETC}"
