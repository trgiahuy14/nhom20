CREATE TRIGGER TG_AUTOCODE_FULLCONTRACT_CODE
ON Full_Contract 
FOR INSERT
AS
BEGIN
    DECLARE @NAMHT VARCHAR(2), @THANGHT VARCHAR(2)
	DECLARE @STT INT , @MAHD VARCHAR (11) , @ID INT 
	SET @ID = (SELECT ID FROM INSERTED ) 

	SET @NAMHT = RIGHT(YEAR(GETDATE()),2)
	SET @THANGHT = CONVERT ( VARCHAR (2) , MONTH(GETDATE()))

	IF NOT EXISTS ( SELECT 1 FROM Full_Contract WHERE SUBSTRING (Full_Contract_Code ,3,2 ) = @NAMHT AND Full_Contract_Code IS NOT NULL )
	  SET @STT = 1 
	ELSE
	  SET @STT = (SELECT MAX ( RIGHT(Full_Contract_Code, 4)) FROM Full_Contract
	                                             WHERE SUBSTRING (Full_Contract_Code ,3,2  ) = @NAMHT ) + 1
	SET @MAHD ='HD' + @NAMHT + @THANGHT + '-' + FORMAT ( @STT, '0000') 
	UPDATE Full_Contract SET Full_Contract_Code = @MAHD WHERE ID = @ID 
END

INSERT INTO [dbo].[Full_Contract] ( [Customer_Name], [Year_Of_Birth], [SSN], [Customer_Address], [Mobile], [Property_ID], [Date_Of_Contract], [Price], [Deposit], [Remain], [Status])
	VALUES ( N'Lý Thị Huyền Châu', 1990, N'301198908', N'45 Trần Hưng Đạo, Quận 5, Thành phố Hồ Chí Minh', N'0919686576', 1, CAST(0x5d400b AS date), 1000000000, 100000000, 900000000, CAST ('True' AS bit))


SELECT * FROM Full_Contract

DROP TRIGGER TG_AUTOCODE_FULLCONTRACT_CODE